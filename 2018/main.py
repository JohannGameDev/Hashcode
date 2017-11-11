import reader
import sys

try:
    file = open('filename.txt')
    inputfile = file.readline ()
    file.close()
except IOError as e:
    print ("No input file existing!")
    filename = input ("Name of inputfile: ")
    file = open("filename.txt", "w")
    file.write (filename)

list = reader.split (filename)

print (list)
