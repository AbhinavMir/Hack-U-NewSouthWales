import os
import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn import svm
from sklearn import preprocessing,cross_validation
from sklearn.neighbors import KNeighborsClassifier
from sklearn import svm
from sklearn.metrics import mean_squared_error,r2_score,accuracy_score

datap=os.getcwd()+'/Untitled form1.csv'
fields=['dur','gender','cpain','bless','tcline','sputum','cid']
data=pd.read_csv(datap,usecols=fields)
data.dropna(inplace=True)
data.reset_index(drop=True,inplace=True)
xx=data.columns
xx.tolist()

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

print(data)

y=np.array(data['sputum'])
X=np.array(data.drop(['sputum'],1))

Xtrain,Xtest,ytrain,ytest=cross_validation.train_test_split(X,y,test_size=0.05)

clss=svm.SVC(probability=True)

#clss=KNeighborsClassifier(n_neighbors=3)
clss.fit(Xtrain,ytrain)
accuracy=clss.score(Xtest,ytest)
print(accuracy)

import pickle
f=open('da_classifier.pickle','wb')
pickle.dump(clss,f)
f.close()

