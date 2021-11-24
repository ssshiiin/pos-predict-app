import numpy as np
import pandas as pd
import statsmodels.api as sm
import math 

def week(csvs):
    df = pd.DataFrame()

    for i in csvs:
        tmp_df = pd.read_csv(i)
        df = pd.concat([df, tmp_df])     

    syo=list(set(df['商品名']))
    syo is np.nan
    lst=[]

    for i in syo:
        if not isinstance(i,float):
            lst.append(i)

    # print(lst)
    #i曜日の各商品の売りあげ
    for i in lst:
        df_sold=df[df['商品名']==i]
        df_sold2 = pd.DataFrame(
            data={'販売点数': df_sold['販売点数'], 'week': df_sold['week']})
        
        df2 = pd.get_dummies(df_sold2)

        y = df2[['販売点数']]
        X = df2.loc[:,df2.columns!='販売点数']

        mod = sm.OLS(y, sm.add_constant(X))
        res = mod.fit()
        
        const = res.pvalues['const']
        category = df[df['商品名']==i].iloc[0]["部門名"]
        Mon = const + res.pvalues['week_月']
        Tue = const + res.pvalues['week_火']
        Wed = const + res.pvalues['week_水']
        Thu = const + res.pvalues['week_木']
        Fri = const + res.pvalues['week_金']
        Sat = const + res.pvalues['week_土']
        Sun = const + res.pvalues['week_日']
        
        print(i,category,Mon,Tue,Wed,Thu,Fri,Sat,Sun)