<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DetectSms extends Component
{
    public string $sms;
    public Collection $smsResults;
    public bool $isScam;

    protected $listeners = ['publishMessage'];

    public function mount()
    {
        $this->sms = "Enter message to check here...";
        $this->isScam = false;
        $this->smsResults = new Collection();
    }

    public function publishMessage(){
        $this->detect();
    }

    private function detect(){
        error_log($this->sms);
        $jsonSms = json_encode(array('smsText' => $this->sms, 'label' => "", 'score' => 0));

        $process = new Process([
            "python3.9",
            app_path('Python\ScammyModel.py'),
            $jsonSms
        ]);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        //dd(json_decode($process->getOutput(), true));
        $this->smsResults = collect(json_decode($process->getOutput(), true));

        $isResultScam = $this->smsResults->where('label', 'LABEL_1');

        error_log($isResultScam);

        if($isResultScam != null && !$isResultScam->isEmpty()){
            error_log("IS SPAM KID");
            $this->isScam = true;
            return;
        }

        $this->isScam = false;

        foreach ($this->smsResults as $key => $value) {
            error_log($key. ' - ' .$value);
        }

        error_log("FINSIHED CHECK - result / ". $this->isScam);
    }

    public function render()
    {
        return view('livewire.detect-sms');
    }
}
