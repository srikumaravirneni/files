
#pip install nltk
'''
To be installed in python shell
import nltk
nltk.download('stopwords')
nltk.download('punkt')
nltk.download('averaged_perceptron_tagger')
'''
#The above toolkits and files must be installed for execution of code.

import nltk
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize, sent_tokenize
stop_words = set(stopwords.words('english'))


txt = "Eight policemen in Uttar Pradesh were shot dead early Friday at a village in Kanpur where they had gone to arrest a criminal wanted for murder. The policemen arrived to \
indiscriminate firing from all sides by the criminal and his associates. A Deputy Superintendent of Police, Devendra  Kumar Mishra, three sub-inspectors and four constables were killed\
in Dikru village, which is 150 km from state capital Lucknow. Teams from three police stations had gone to the village in search of a wanted criminal - Vikas Dubey - charged in 60 criminal\
cases. A raid was planned at his village after he was accused in a fresh attempt to murder case. The intention was to arrest him. There was an ambush. The firing by criminals was from \
three sides and it was totally planned, said Dinesh Kumar, Kanpur's police chief. According to a statement by UP Director General of Police (DGP) HC Awasthi, Vikas Dubey and other men had \
put up road blocks on the routes that lead to the village. Once the cops removed them and managed to get to the village, they were fired at from rooftops by shooters who were apparently \
waiting for them. Visuals from a nearby hospital showed ambulances bringing in wounded policemen. A road taken by the policemen when they were attacked is splattered with blood. Chief \
Minister Yogi Adityanath condoled the deaths and asked for a report on the incident. The UP police chief has been directed to take strict action against criminals, said a statement from \
the Chief Minister's office. Police sources said Vikas Dubey has a long history of crime, including an alleged role in the murder of a BJP politician in 2001; he was acquitted in that case."

tokenized = sent_tokenize(txt)
nouns=[]
verbs=[]



for i in tokenized:
        for word,pos in nltk.pos_tag(nltk.word_tokenize(str(txt))):
                if(pos=="NN" or pos=="NNP" or pos=="NNS" or pos=="NNPS"):
                        nouns.append(word)
                        list_noun=set(nouns)





                if(pos=="VB" or pos=="VBN" or pos=="VBZ" or pos=="VBG" or pos=="VBD" or pos=="VBP"):
                       verbs.append(word)
                       list_verb=set(verbs)

x=sorted(list_noun,key = lambda s: s.casefold())
y=sorted(list_verb,key = lambda s: s.casefold())
print("Nouns=",x)
print("Verbs=",y)
