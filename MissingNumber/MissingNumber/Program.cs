using System;
using System.Linq;
using System.Collections.Generic;           

namespace MissingNumber
{
    class MainClass
    {
      

        static int getMissingNo(int[] arr)
        {
            int number = 0;
            foreach (int missingItem in arr)
                number = missingItem;
            return number;

            


        }
        public static void Main(string[] args)
        {
            

            IEnumerable<int> numbers = Enumerable.Range(1, 100);

            List<int> list = numbers.ToList();
            list.Remove(3);
            var strItems = list.ToArray();
            var missingItems = numbers.Except(strItems);
           
                
            int miss = getMissingNo(missingItems.ToArray());
            Console.WriteLine(miss);
            /*b
             * 
            IEnumerable<int> numbers = Enumerable.Range(1, 100);
           
            List<int> list = numbers.ToList();
            list.Remove(3);
            var strItems = list.ToArray();

            var missingItems = numbers.Except(strItems);

            foreach (int missingItem in missingItems)
            {
                Console.WriteLine(missingItem);
            }

            Console.ReadLine();*/

           
        }

       
    }
}
