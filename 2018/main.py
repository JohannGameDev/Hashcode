import reader
import sys

try:
    file = open('filename.txt')
    inputfile = file.readline ()
    file.close()
except IOError as e:
    print ("No input file existing!")
    inputfile = input ("Name of inputfile: ")
    file = open("filename.txt", "w")
    file.write (inputfile)

list = reader.split (inputfile)

print (list)
