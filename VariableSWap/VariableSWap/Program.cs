using System;

namespace VariableSWap
{
    class MainClass
    {
        public static void Main(string[] args)
        {
            //We can use the + and - operatores to swap values with out a third number
            //at this starting point a is 10 and b is 20
            int a = 6;
            int b = 8;
            Console.Write("Before swap a = {0} and b = {1}", a, b);
            a = a + b; // at this point a=14
            b = a - b; //at this point b=6
            a = a - b; //at this point a=8
            Console.Write("   ");

            Console.Write("After swap a = {0} and b = {1}", a, b);
        }
    }
}
