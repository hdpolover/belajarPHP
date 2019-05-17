from sklearn import neighbors
from sklearn.metrics import accuracy_score
import pandas as pd

df = pd.read_csv("contoh-data.csv")
# print(df)
# print(df.columns)

df = df[df["Kategori"] != "?"]

x = df[["Tinggi", "Massa"]]
y = df["Kategori"]

# training
clf = neighbors.KNeighborsClassifier(4, p=2, metric="minkowski")
clf.fit(x,y)

# mengukur akurasi
y_pred = clf.predict(x)
# print("Akurasi", accuracy_score(y, y_pred))

print("Akurasi", accuracy_score(y, y_pred), "Hasil prediksi", clf.predict([[200, 180]]))