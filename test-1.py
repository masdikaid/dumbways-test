# define function pascal_function
def pascal_function(n):

    # define array variable
    arr = []

    # looping n value
    for i in range(n+1):

        # get the current array for generate new line
        ray = arr

        # reset the array for keep new generate line
        arr =[]

        # looping for generate line
        for x in range(i+1):
            # detect if x is not the first or last array and add up the value and if else only print 1
            if x > 0 and x < len(ray):
                arr.append(ray[x] + ray[x-1])
            else:
                arr.append(1)

        # looping to print the line
        for j in arr:
            print(j, end=" ")
        
        # print new line
        print("")
        

# run the input function from dumbways test-1
if __name__ == "__main__":
    pascal_function(4)