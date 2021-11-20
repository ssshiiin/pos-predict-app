import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
import statsmodels.api as sm

def min_max(csvs):
    df = pd.DataFrame()
    week = ["月", "火", "水", "木", "金", "土", "日"]

    for i in csvs:
        tmp_df = pd.read_csv(i)
        df = pd.concat([df, tmp_df]) 
    
    syo=list(set(df['商品名']))
    syo is np.nan
    lst=[]
    for i in syo:
        if not isinstance(i,float):
            lst.append(i)
    for i in lst:
        for j in week:
            df_sold=df[df['商品名']==i]
            sold_week = df_sold[df_sold['week']==j]['販売点数'].to_list()
            
            x=np.array(sold_week)
            x0 = x[0]
            if all(item == x0 for item in x):
                down = x0
                up = x0
                break

            #Sample size.
            n=x.size

            #Sample mean.
            x_mean=x.mean()

            #Unknown SD.
            x_sd=np.std(x,ddof=1)

            down,up=st.t.interval(alpha=0.95,df=n-1,loc=x_mean,scale=x_sd/np.sqrt(n))
            if down < 0 or down<0.5:
                down = 0
            print(i,j,round(down),round(up))
            
            