#nltk.download('names')

def gender_features(word):
    return {'last_letter': word[-1]}
import nltk


import random
from nltk.corpus import names


male_names = [(name, 'male') for name in names.words('male.txt')]
female_names = [(name, 'female') for name in names.words('female.txt')]
labeled_names = male_names + female_names
random.shuffle(labeled_names)
from nltk import NaiveBayesClassifier
featuresets = [(gender_features(n), gender) for (n, gender) in labeled_names]

train_set, test_set = featuresets[500:], featuresets[:500]

classifier = NaiveBayesClassifier.train(train_set)

name1_gender = classifier.classify(gender_features('madhavi'))
name2_gender = classifier.classify(gender_features('rahul'))
print("Name1 is most probably a {}.".format(name1_gender))
print("name2 is most probably a {}.".format(name2_gender))
