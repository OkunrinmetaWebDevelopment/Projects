using System;
using NumberToText;
using NumberText;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace NumberToText
{
    class MainClass
    {

      
        static void Test(int[] array)
        {
            //Adding all the numbers in the array
            int sum = array.Sum();
            //converting it to text
            string text = sum.ToText();
            //counting the characters exluding the spaces 
            int countWords = text.Split(null).Length; // 7
            Console.WriteLine("Array received: " + countWords+ array.Length);
        }
        public static void Main(string[] args)
        {
            //Using robert grenner Number to text package (https://github.com/robertgreiner/NumberText) to convert my integers into words
           //using iEnumirable to set a range from 1-1000
            IEnumerable<int> numbers = Enumerable.Range(1, 1000);
            //storing the number in a list
            List<int> list = numbers.ToList();
            //converting the list of numbers to an array
            int []streams = list.ToArray();
            //putting the array of numbers into the test function above
            Test(streams);

        }
    }
}



