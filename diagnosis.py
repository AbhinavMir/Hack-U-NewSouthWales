#diagnosis
import os
import pandas as pd
import matplotlib.pyplot as plt 
datap=os.getcwd()+'/Untitled form2.csv'
fields=['dur','gender','cpain','bless','tcline','sputumr','cid']
data=pd.read_csv(datap,usecols=fields)
xx=data.columns
xx.tolist()
#print(data)
tbc=[]

nctb=[]
print('---------------')

for index, row in data.iterrows():
   #print(row)
   cc=list(row)
   #print(cc)
   if int(cc[5])==1:
      tbc.append(cc[5])
   if int(cc[5])==0:
      nctb.append(cc[5])


  
# defining labels 
sits = ['Confirmed Tuberculosis', 'Still not Confirmed'] 
  
# portion covered by each label 
slices = [len(tbc), len(nctb)] 
  
# color for each label 
colors = ['b', 'y'] 
  
# plotting the pie chart 
plt.pie(slices, labels = sits, colors=colors,  
        startangle=90,radius = 0.5,autopct = '%1.1f%%') 


textstr='Patients with positive Sputum tests- DOTS MODALITY TREATMENT'
str2='Drug Prescription: IONOZIAD, RIFAMPACIN, ETHAMBUTOL AND PYRIDAMIZINE'

text33='Patients with negative Sputum tests- Perform and '
text22='upload a Chest Xray'
text44='Drug Prescription ANTIBIOTICS:- '
text11='FLUOROQUINOLONES(CIPROFLAXIN,OFLOXACIN) AND STREPTOMYCIN'
text55='These antibiotics are active against TB'


plt.gcf().text(0.02, 0.75, textstr, fontsize=10)
plt.gcf().text(0.02, 0.70, str2, fontsize=10)
plt.gcf().text(0.55, 0.15, text33, fontsize=10)
plt.gcf().text(0.55, 0.12, text22, fontsize=10)
plt.gcf().text(0.55, 0.09, text44, fontsize=9)
plt.gcf().text(0.55, 0.06, text11, fontsize=9)
plt.gcf().text(0.55, 0.03, text55, fontsize=9)
#plt.gcf().text(0.02, 0.70, str2, fontsize=7)
# plotting legend 
plt.legend() 
  
# showing the plot 
plt.show() 

      
      
