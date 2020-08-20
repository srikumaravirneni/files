#pip install nltk
'''
To be installed in python shell
import nltk
nltk.download('stopwords')
nltk.download('punkt')
nltk.download('averaged_perceptron_tagger')
'''
#The above toolkits and files must be installed for execution of code.

import nltk;
from nltk.corpus import stopwords
from nltk.tokenize import sent_tokenize, word_tokenize
 
stop_words = set(stopwords.words('english'))



txt='''
  Calvin licked his lips. "Where are we going?"

 "Up." Charles continued his lecture. " On Camazotz we are all happy because we are all alike. Differences create problems. You know that, don't you, dear sister? " 

  "No," Meg said.

 "Oh, yes, you do. You've seen at home how true it is. You know that you're not happy at school. Because you're different."

 "I'm different, and I'm happy," Calvin said.

 "But you pretend that you aren't different."

 "I'm different, and I like being different." Calvin's voice was unnaturally loud.

 "Maybe I don't like being different," Meg said, "but I don't want to be like everybody else, either."

 Now he is here," I exclaimed. "For Heaven's sake, hurry down! Do be quick; and stay among the trees till he is fairly in."

 "I must go, Cathy," said Heathcliff, seeking to extricate himself from his companion's arms. "I won't stray five yards from your window."

 "For one hour," he pleaded earnestly.

 "Not for one minute," she replied.

 "I must Linton will be up immediately," persisted the intruder.

 "Hi, Richard," she said, and spit out a mouthful of toothpaste. She was wearing cut-off jeans that had bizarre, frantic designs drawn on them in Magic Marker and a spandex top which revealed her intensely aerobicized midriff.

 "Hello," I said, setting to work on my tie.

 "You look cute today."

 "Thanks.

 "Got a date?"

 I looked away from the mirror, at her. "What?"

 "Where you going?"

 Hard evidence isn't hard evidence if you don't break your back digging for it. An editor named Dom Grelsch told me that."

 Grelsch glares at her. 

 " I got a lead, Dom." 

 "You got a lead."

 I can't batter you, I can't fool you. I can only hook your curiosity. "I phoned the precinct where Sixsmith's case was processed." 

 You can see how the inner dialogue works seamlessly with the outer dialogue to give you more insight into the character, Luisa Rey. 

 Handsome lad like you. There must be some special girl. Come on, what's her name?" says Caesar.

 Peeta sighs. "Well, there is this one girl. I've had a crush on her ever since I can remember. But I'm pretty sure she didn't know I was alive until the reaping.

 Sounds of sympathy from the crowd. Unrequited love they can relate to.

 " She have another fellow?" asks Caesar.

 " I don't know, but a lot of boys like her," says Peeta.

 " So, here's what you do. You win, you go home. She can't turn you down then, eh?" says Caesar encouragingly.

 " I don't think it's going to work out. Winning.won't help in my case," says Peeta.

 " Why ever not?" says Caesar, mystified.

 Peeta blushes beet red and stammers out. "Because.because.she came here with me.”

 Susan asked, "When will Daddy come home?"

  I rolled my eyes at the thought of having to answer this question for the millionth time. "Soon, baby," I offered in my most soothing tone.

  "But, he said he would be home for dinner," she wailed, "and it's past dinnertime! "

  "In life, you'll learn there are many things that are out of our control," I retorted through the massive wails. I continued, almost to myself, "But, we have to just carry on. "



'''

txt.strip()

a=(txt.split('\n'))


for i in range(len(a)):
     v=a[i]
     vArr=(v.split('.'))
     for j in range(len(vArr)):
             m=vArr[j]   
             vArr2=(m.split(' '))
             tw= nltk.Text(vArr2)
             if (len(tw)>5):
                 vArr2s=[x.lower() for x in vArr2] 
                 
                 print(vArr[j])
                 
                 taskwords=['job','chore','errand','quest','complete','do','finish','call','meet','give','take','send','go','come','please','update','share',\
                 'how','what','when','who']
                 qwords=['what','when','who','did','where','how','whom','whose','why','can','accomplish','?','know',]
                 workdone=['completed','done','accomplished','finished']
                    
                 
                 
                 check1=any(item in vArr2 for item in taskwords)
                 check2=any(item in vArr2 for item in qwords)
                 check3=any(item in vArr2 for item in workdone)
                 
                 print(vArr2)
                 
                 if check1 is True:
                     print("-T")    
                 
                 if check2 is True:
                     print("-Q")    
                 
                 if check3 is True:
                     print("-W")    
                     
                 if check1 is False and check2 is False and check3 is False:
                     print("-X")
                 	
                 print('<br>') 	
                 print('<br>') 	
                 
                 	
             else:
                 print("")
             	
             
             	
         




	    
