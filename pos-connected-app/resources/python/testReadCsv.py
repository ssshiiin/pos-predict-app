import pandas as pd

url = "https://pos-predict-app.s3.ap-northeast-1.amazonaws.com/CsvTest/2021-10-06.csv"
df = pd.read_csv(url)
print("test csv")
print(df.head())