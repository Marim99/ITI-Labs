# 1-Write a Ruby program to create a new string which is n copies of a given string where n is a non-negative integer
def write_string(string,n)
    n.times do |i|
        puts string * (i+1)
    end
end



# 2-Write a Ruby program to check whether a string starts with "if".

def check_string_contains_if?(string)
    string.start_with?("if")
end

# 3-Write a Ruby program to create a new string from a given string where the first and last characters have been exchanged

def exchange_first_last(string)
    if string.length >= 2
      string[0], string[-1] = string[-1], string[0]
    end
    string
  end

# 4-Write a Ruby program to create a new string from a given string with the last character added at the front and back of the given string. The lenght of the given string must be 1 or more.

def rotate_left(arr)
    rotated_arr = arr[1..-1] + [arr[0]]
  end




# 5-Write a Ruby program to test whether a year is leap year or not.
def leap_year?(year)
    (year % 4 == 0) && (year % 100 != 0 || year % 400 == 0)
end
#6-Write a Ruby program to create an array with the elements "rotated left" of a given array of integers length 3.
def compute_sum(array)
    result = []
    skip_next = false
  
    array.each_with_index do |num, index|
      if skip_next
        skip_next = false
        next
      end
  
      if num == 17 && index < array.length - 1
        skip_next = true
        next
      end
  
      result << num
    end
  
    result
  end




# CALL Functions 
#----------1-----------
write_string("a", 5)
#----------2-----------
output=check_string_contains_if?("if not")
puts output
#----------3-----------
output1 = exchange_first_last("Java")
puts output1
#-----------4-----------
arrays = [[1, 2, 5], [1, 2, 3], [1, 2, 4]]
  
arrays.each do |arr|
  output2 = rotate_left(arr)
  puts output2.inspect
end
#-----------5-----------
year = 2014
if leap_year?(year)
    puts "#{year} is a leap year"
else
    puts "#{year} is not a leap year"
end
#-----------6-----------
arrays = [[3, 5, 17, 6], [3, 5, 1, 17], [3, 17, 1, 7]]
arrays.each do |array|
  output3 = compute_sum(array)
  puts output3.inspect
end 