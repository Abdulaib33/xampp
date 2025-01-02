-- LOOPS

--Basic Exercises
--1. Count to 10 using for:
--Objective: Understand how a for loop iterates through a sequence of numbers.
--What to do:
--Use a loop to display numbers from 1 to 10, one by one. Each iteration should print a number on a new line.
--Concepts:
--Initializing a loop variable.
--Defining an end condition.
--Automatic incrementation.

for i = 1, 10, 1  do
	print(i)
end


--2. Reverse counting with for:
--Objective: Learn how to configure a decreasing loop with a negative step.
--What to do:
--Count from 10 down to 1. Adjust the loop to decrease the variable instead of increasing it.
--Concepts:
--Setting a negative step (e.g., -1).

for i = 10, 1, -1 do
    print(i)
end



--3. Sum of numbers:
--Objective: Combine a loop with a cumulative operation (addition).
--What to do:
--Iterate through numbers from 1 to 100. Add each number to a variable starting at 0 to compute the total sum. Display the final sum after the loop.
--Concepts:
--Initializing a variable to store a total.
--Adding each number to the total during each iteration.

local sum = 0
for i = 1, 100 do
    sum = sum + i
end
print(sum)


--4. Even or odd numbers:
--Objective: Apply conditions inside a loop.
--What to do:
--Iterate through numbers from 1 to 20. Check if each number is even or odd using the modulo operator (%). Display "Even" or "Odd" for each number.
--Concepts:
--Modulo for checking remainders.
--Using conditions in a loop.

for i = 1, 20, 1 do
    if i % 2 == 0 then
        print(i .. " is Even")
    else  
        print(i .. " is Odd")
    end
end


--5. Multiples of 3:
--Objective: Identify values that meet a specific condition.
--What to do:
--Loop through numbers from 1 to 30. If a number is divisible by 3 without a remainder, display it. Otherwise, skip it.
--Concepts:
--Conditional checks in a loop.
--Continuing or skipping values within a loop.

for i = 1, 30, 1 do
    if i % 3 == 0 then
        print(i .. " is divisible by 3")
    end
end


--6. Fruit array:
--Objective: Learn how to iterate through an array with a loop.
--What to do:
--Create an array with three fruit names (e.g., {"Apple", "Banana", "Cherry"}). Use a loop to display each fruit with its index (e.g., "1: Apple").
--Concepts:
--Array structure.
--Using ipairs to loop through an array.

local array = {"Apple", "Banana", "Cherry"}

for i = 1, #array, 1 do
    print(i .. ": " .. array[i])
end

-- for i, arrays in ipairs(array), 1 do   --- I DONT UNDERSTAND IPARIS FOR NOW SO LET LIVE IT HERE
--     print(i .. ": " .. arrays)
-- end


--7. Length of a word:
--Objective: Learn to process strings.
--What to do:
--Ask the user to enter a word. Loop through each character in the word to count how many characters it contains. Display the result.
--Concepts:
--Iterating through a string with a loop.
--Counting with a variable.

print("Please enter word")
local word = io.read()

local length = string.len(word)

print("The word: " .. word .. " has " .. length .. " characters")



--8. Setting a threshold:
--Objective: Use a while loop to wait for a certain condition.
--What to do:
--Ask the user to enter a number. Keep asking as long as the number is less than or equal to 10. Stop the loop when the number is greater than 10.
--Concepts:
--Loops controlled by a condition (while).
--User interaction.

local number = tonumber(io.read())

while number <= 10 do
    print("Please enter a number greater than 10")
    number = tonumber(io.read())
end
print("im from the while solution :")
print("You entered a number greater than 10: " .. number)


repeat
    print("Please enter a number less than or equal to 10")
     numberAsk = tonumber(io.read()) -- it's not a local variable because we want to use it out of the repeat loop
until numberAsk > 10
print("Im from the repeat method :")
print("You entered a number greater than 10: " .. numberAsk)


--9. Conditional sum:
--Objective: Filter values within a loop.
--What to do:
--Loop through numbers from 1 to 50. Add to a sum variable only the numbers that are multiples of 5. Display the total sum at the end.
--Concepts:
--Conditional checks in a loop.
--Conditional addition.

local sum2 = 0
for i = 1, 50 do
    if i % 5 == 0 then
        sum2 = sum2 + i
    end
end
print("La somme des multiples de 5 de 1 à 50 est : " .. sum2)


--10. Controlled infinite loop:
--Objective: Create an infinite loop with a controlled exit.
--What to do:
--Create a loop that runs indefinitely (while true). Add a condition that breaks the loop if the user enters a specific keyword, like "stop."
--Concepts:
--Infinite loops.
--Using conditions to break a loop.
--Advanced Exercises



while true do

    print("Please enter stop")
    local stopWord = io.read()

    if stopWord == "stop" then
        print("you have enter stop")
        break
    else
        print("Try again! Enter 'stop' to stop the loop.")
    end
end




--11. Count vowels:
--Count how many vowels (a, e, i, o, u) are in a sentence provided by the user.
--Loop through each letter, check if it’s a vowel, and increment a counter.




--12. Factorial:
--Ask the user for a positive integer and compute its factorial (the product of all numbers up to that number).
--Use a loop to multiply each number.




--13. Search in an array:
--Create an array of names and check if a name entered by the user exists in the array.
--Loop through each element and compare it to the provided name.




--14. Find the maximum value:
--Create an array of numbers. Loop through the array to find and display the largest value.
--Compare each element to the current maximum.




--15. Multiplication table:
--Use nested loops to generate a complete multiplication table (e.g., 3x5 = 15).
--The outer loop iterates through rows, and the inner loop iterates through columns.




--16. Palindrome number:
--Check if a number provided by the user is the same when read backward.
--Use a loop to reverse the number and compare it to the original.




--17. Filter numbers:
--Create an array of random numbers between 1 and 100. Display only those greater than 50.
--Loop through the array and apply a condition.




--18. Sort an array:
--Implement a simple sorting algorithm (like selection sort or bubble sort) to rearrange an array in ascending order.
--Use nested loops to compare and swap elements.




--19. Character movement simulation:
--Simulate a series of repeated actions, such as moving forward 5 times and then turning once.
--Use a loop to repeat the sequence multiple times.




--20. Guessing game:
--Generate a random number. The user must guess it. Provide hints (e.g., "higher" or "lower") until the correct number is guessed.
--Use a loop to keep asking until the user finds the correct answer.
