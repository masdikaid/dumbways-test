# define the string filter
def stringFilter(string):
    # define new variable to keep filtered string
    newstring = ""

    # looping all of string content
    for s in string:
        # check if new string has the letter of string if not add to newstring
        if s not in newstring:
            newstring += s
    #  print result
    print(newstring)


# run the input from dumbways test
if __name__ == "__main__":
    stringFilter("alagcgcdodol")