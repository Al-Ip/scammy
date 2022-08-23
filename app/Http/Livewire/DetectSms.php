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
    public Collection $conversationHistory;

    protected $listeners = ['detect', 'sendSms'];

    public function mount()
    {
        //$this->sms = " Please pay the remaining cost at 098323523.";
        $this->sms = "Enter message to check here...";
        $this->smsResults = new Collection();
        $this->conversationHistory = new Collection();
        $this->addToConversation("A", "Hi 😀", "1s");
        $this->addToConversation("A", "Welcome to Scammy! \n - A place where you can enter an sms text and find out if its a scam or not!", "5s");
        $this->addToConversation("A", "You can type your text below and hit the send button for the result!", "9s");
    }

    public function sendSms(){
        $this->addToConversation("B", $this->sms, "1s");
        $this->emit("detect");
    }

    public function detect(){
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

        $isResultScam = $this->smsResults->filter(function($label){
            return $label == 'LABEL_1';
        });

        if($isResultScam != null && !$isResultScam->isEmpty()){
            $this->addToConversation("A", "The sms you sent is most likely a spam or malicious text! ⚠️", "1s");
        }
        else{
            $this->addToConversation("A", "The sms you sent is not spam! 🎉", "1s");
        }
    }

    public function addToConversation($type, $text, $delay){
        $this->conversationHistory->prepend([
            "type" => $type,
            "text" => $text,
            "delay" => $delay
        ]);
    }

    public function render()
    {
        return view('livewire.detect-sms');
    }
}
