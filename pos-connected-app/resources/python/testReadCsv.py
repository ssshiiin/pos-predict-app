import pandas as pd
import sys
# from dotenv import load_dotenv
# import boto3
# import os
# import io
from week import week





def main():
  args = sys.argv
  params = args[1].split(",")
  csvs = []
  for i in params:
    if (i == ""):
      continue
    csvs.append(i)

  week(csvs)


if __name__ == "__main__":
  main()
