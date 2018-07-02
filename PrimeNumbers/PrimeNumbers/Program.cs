using System;
using System.Linq;
using System.Collections.Generic;

namespace PrimeNumbers
{
    class MainClass
    {
        public static void Main(string[] args)
        {
            //Creating a list to store prime numbers, it also serves a a counter
            List<long> primeNumbers = new List<long>() { 2 };
            //i starting at 3 , looping through to the maximum value of long and for each value of i 2 should be added 
            for (long i = 3; i < long.MaxValue; i += 2)
            {
                //a filter to check if the list contains only prime number
                if (!primeNumbers.Any(p => (i % p) == 0))
                {
                    //After the filter the prime numbers are aded to the lis
                    primeNumbers.Add(i);
                    //Setting a condition when the prime number count get to 10001
                    if (primeNumbers.Count == 10001)
                    {
                        //The prime number at this count should be printed out 
                        Console.WriteLine(i);
                        break;
                    }
                }
            }
        }
    }
}
