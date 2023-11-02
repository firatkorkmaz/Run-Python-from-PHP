import sys

filename = sys.argv[1]              # filename is Received from the "exec" Function in "brand_get.php" File

with open(filename, 'a') as f:      # Open the Existing File to Append New Data
    add = "\nNew Line from run.py"
    f.write(add)                    # New Line is Appended to the Existing File