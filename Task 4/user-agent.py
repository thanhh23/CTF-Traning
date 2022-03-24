import requests

url = 'http://challenge01.root-me.org/web-serveur/ch2/'
headers = {'user-agent': 'admin'}

r = requests.get(url, headers=headers)
print(r.text)