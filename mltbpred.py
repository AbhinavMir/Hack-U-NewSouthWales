import os
import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn import svm
from sklearn.neighbors import KNeighborsClassifier
from sklearn import svm
from sklearn.metrics import mean_squared_error,r2_score,accuracy_score
import pickle

import matplotlib.pyplot as plt



datap=os.getcwd()+'/Untitled form2.csv'
fields=['dur','gender','cpain','bless','tcline','sputum','cid']
data=pd.read_csv(datap,usecols=fields)
xx=data.columns
xx.tolist()


ticks=list(data['cid'])
print(len(ticks))
dd=[str(i) for i in ticks]
dd.pop()
#print(dd)
ticks=dd
def mapping(list1,dict1,x):
    list1=data[x].unique()
    #print(list1)
    dict1={}
    for i in range(len(list1)):
        
        dict1.update({list1[i]:i})
    #print(dict1)
    data[x]=data[x].map(dict1)
    
listabc=[]
dictt={}


mapping(listabc,dictt,'gender')
mapping(listabc,dictt,'cpain')
mapping(listabc,dictt,'bless')
mapping(listabc,dictt,'dur')
#mapping(listabc,dictt,'tcline')
#mapping(listabc,dictt,'sputum')

#print(data)
f = open('da_classifier.pickle', 'rb')
clss = pickle.load(f)
f.close()

y=np.array(data['sputum'])
X=np.array(data.drop(['sputum','cid'],1))


Xtrain,Xtest,ytrain,ytest=train_test_split(X,y,test_size=0.05)
predictions=clss.predict(Xtrain)


#print(predictions)


predictions1 = clss.predict_proba(Xtrain)

#print(predictions1)

probs=[]
for i in range(len(predictions1)):
               if predictions1[i][0]>predictions1[i][1]:
                  
                  probs.append(predictions1[i][0])
               else:
                  probs.append(predictions1[i][1])
                  

print(len(probs))
a=[i for i in range(1,len(probs)+1)]
#print(a)



plt.bar(a,probs,tick_label=ticks)

# naming the x-axis 
plt.xlabel('Case IDs') 
# naming the y-axis 
plt.ylabel('Confidence percentage') 
# plot title 
plt.title('Confidence level for neccessity of a SPUTUM test') 
plt.show()
