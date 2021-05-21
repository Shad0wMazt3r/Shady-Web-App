import requests
import sys
payload = {'cookie' : "'admin': 'long as Im Shady, hes gon have to live in my shadow'"}
r = requests.get(sys.argv[1], params=payload)
print(r.text)