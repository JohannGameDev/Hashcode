def split (file):
    input = open(file, "r")
    temp = [x.split (" ") for x in input.read().splitlines()]
    input.close ()
    return (temp)
