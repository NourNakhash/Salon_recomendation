#Machine Learning Model For recommendation Salon 

#import libraries 

import pandas as pd
import seaborn as sns
from pandasql import sqldf
pysqldf = lambda q: sqldf(q, globals())
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.tree import DecisionTreeClassifier
from sklearn.metrics import accuracy_score


from sklearn.metrics import confusion_matrix
from sklearn.metrics import classification_report

from sklearn import metrics



#Read from appointment file
adf = pd.read_csv ("appointment (1).csv")
adf.head()
#drop cloumns from appointment table
adf.drop(['appointmentDate','appointmentDate','appointmentTime','CustomerPhone','Status'],axis=1,inplace=True)
adf

adf.rename(columns = {'Service_ID':'ServiceID'}, inplace = True)
adf
#Read from customer file
cdf = pd.read_csv ("customer.csv")
cdf.head()
cdf.rename(columns = {'customer_ID':'CustomerID'}, inplace = True)
cdf
#drop cloumns from appointment table
cdf.drop(['role_type','Password','CustomerPhone'],axis=1,inplace=True)
cdf

#Read from salon file
sdf = pd.read_csv ("salon.csv")
sdf.head()
sdf.rename(columns = {'ServiceId':'ServiceID'}, inplace = True)

#drop cloumns from salon table
sdf.drop(['OpeningTIme', 'ClosingTime','Phonenumber'], axis=1, inplace=True)
sdf.head()
#Read from salonservice  file
sedf = pd.read_csv ("salonservice (1).csv")
sedf.head()
#drop cloumns from salonservice  table
sedf.drop(['ServicePrice', 'ServiceTime'], axis=1, inplace=True)
sedf

#merge between salonservice and appointment tables
df = pd.merge(sedf, adf, on='ServiceID', how='inner')
df.info()

#merge between salonservice and appointment and salon tables
ff = pd.merge(df, sdf[['ServiceID','SalonName','Region','City']], on='ServiceID', how='inner')
ff.tail()

#merge between salonservice and appointment and salon and customer tables
ef = pd.merge(ff, cdf[['CustomerID','CustomerName','CustomerRegion']], on='CustomerID', how='inner')

ef.tail()
ef.info()

#calculate teh corelation
Corelation = ef.corr()
Corelation

ef.head()
y_data = ef['SalonName']
x_data=ef.drop(['SalonName'],axis=1)

x_data.head()

#drop colums from table
x_data= x_data.drop(['CustomerID','ServiceID','appoinmentID','SalonID','Region','CustomerName'], axis=1)
x_data.head()

X=x_data

from sklearn.preprocessing import LabelEncoder

#class to convert the data from string values to numerical values
class MultiColumnLabelEncoder:

    def __init__(self, columns=None):
        self.columns = columns # array of column names to encode

    def fit(self, X, y=None):
        self.encoders = {}
        columns = X.columns if self.columns is None else self.columns
        for col in columns:
            self.encoders[col] = LabelEncoder().fit(X[col])
        return self

    def transform(self, X):
        output = X.copy()
        columns = X.columns if self.columns is None else self.columns
        for col in columns:
            output[col] = self.encoders[col].transform(X[col])
        return output

    def fit_transform(self, X, y=None):
        return self.fit(X,y).transform(X)

    def inverse_transform(self, X):
        output = X.copy()
        columns = X.columns if self.columns is None else self.columns
        for col in columns:
            output[col] = self.encoders[col].inverse_transform(X[col])
        return output


# return the numeric value to its sting value 
multi = MultiColumnLabelEncoder(columns=['ServiceName','City','CustomerRegion'])
X = multi.fit_transform(X)

x_data=X
x_data.head()
#slpit the data to train data (70%) and test data (30%) 
x_train , x_test , y_train , y_test = train_test_split (x_data , y_data , test_size = 0.3 , train_size = 0.7 , random_state = 0)

print ("Train Data x Shape: " , x_train.shape)
print ("Test Data x Shape: " , x_test.shape)
print ("Train Data y Shape: " , y_train.shape)
print ("Test Data y Shape: " , y_test.shape)

# ## Random Forest

Random_Forest_Classifier = RandomForestClassifier( n_estimators = 75 , max_leaf_nodes = 5 , n_jobs = -1 )
Random_Forest_Classifier

Random_Forest_Classifier.fit( x_train , y_train.values.ravel() )

Predict_Value_Of_Random_Forest_Classifier = Random_Forest_Classifier.predict( x_test )
Predict_Value_Of_Random_Forest_Classifier

#calculate the Accuracy of the model 
print( "Accuracy : " , accuracy_score( y_test , Predict_Value_Of_Random_Forest_Classifier )*100 , "%" )
Model_Accuracy = []
Model_Name = []
Model_Accuracy.append(accuracy_score( y_test , Predict_Value_Of_Random_Forest_Classifier )*100)
Model_Name.append("Random_Forest_Classifier")


# ##### Decision Tree

Decision_Tree_Classifier = DecisionTreeClassifier( criterion = 'entropy', random_state = 0 )
Decision_Tree_Classifier

Decision_Tree_Classifier.fit( x_train , y_train.values.ravel() )

Predicted_Value_Of_Decision_Tree = Decision_Tree_Classifier.predict( x_test )
Predicted_Value_Of_Decision_Tree

#calculate the Accuracy of the model 
print( "Accuracy : " , accuracy_score( y_test , Predicted_Value_Of_Decision_Tree)*100 , "%" )

Model_Accuracy.append(accuracy_score( y_test , Predicted_Value_Of_Decision_Tree )*100)
Model_Name.append("Decision_Tree")

### Prediction by random Number , same will happen when user will input in form
x_data.head()
Yhat=Decision_Tree_Classifier.predict([[1,22,0]])
Yhat

ef.head()
x_data.head()
x_data['ServiceName'].value_counts()

x_data['CustomerRegion'].value_counts()

x_data['City'].value_counts()

inv = multi.inverse_transform(x_data)
inv.head()
inv['ServiceName'].value_counts()

inv['CustomerRegion'].value_counts()
inv['City'].value_counts()

 # loading dependency
import joblib
filename="final_model.sav"
joblib.dump(Decision_Tree_Classifier, filename)
loaded_model = joblib.load(filename)






