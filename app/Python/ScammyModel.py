
#LABEL_0 = Not spam

import sys
import json
from transformers import AutoTokenizer, AutoModelForSequenceClassification
from transformers import pipeline

tokenizer = AutoTokenizer.from_pretrained("mrm8488/bert-tiny-finetuned-sms-spam-detection")

model = AutoModelForSequenceClassification.from_pretrained("mrm8488/bert-tiny-finetuned-sms-spam-detection")

classifier = pipeline("text-classification", model=model, tokenizer=tokenizer)

#x =  '{"smsText":"Camera - You are awarded a SiPix Digital Camera! call 09061221066 fromm landline. Delivery within 28 days.", "label":"", "score":0}'
x = sys.argv[1];
data = json.loads(x)

results = classifier(data["smsText"])

for result in results:
    data["label"] = result['label']
    data["score"] = round(result['score'], 4)
    data.pop('text', None)

print(json.dumps(data))
