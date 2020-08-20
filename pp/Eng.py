
import nltk 
from nltk.corpus import stopwords 
from nltk.tokenize import word_tokenize, sent_tokenize 
stop_words = set(stopwords.words('english')) 


txt = "The spike in the number of COVID cases in Telangana continued on Tuesday with 945 people testing positive for the virus,taking the total \
tally in the state to 16,339. With seven new deaths reported from across the state, the toll in the state has risen to 260. Hyderabad alone reported 869 cases."
        
tokenized = sent_tokenize(txt)
for i in tokenized:

	wordsList = nltk.word_tokenize(i) 

	
	wordsList = [w for w in wordsList if not w in stop_words] 

	tagged = nltk.pos_tag(wordsList) 

	print(tagged) 
