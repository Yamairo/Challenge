import json
from os import path

filename = 'json/products.json'
listObj = []

if not path.isfile(filename):
    raise Exception("File not found")

with(open(filename)) as fp:
    listObj = json.load(fp)

# print(listObj)
# print(type(listObj))

id = 0
for i, j in enumerate(listObj):
    if j["id"] > id:
        id = j["id"] + 1

listObj.append({
    "id": id,
    "name": input("naam product: \t"),
    "barcode": int(input("nummers van de barcode: \t")),
    "experation_date": input("houdbaarheidsdatum (eg. jaar-maand-dag): \t"),
    "alert_threshold": int(input("dagen tot houdbaarheidsdatum: \t")),
    "url": input("bestandsnaam foto (eg. brood.png): \t")
})

# Verify updated list
print(listObj)

with open(filename, 'w') as json_file:
    json.dump(listObj, json_file,
              indent=4,
              separators=(',', ': '))
