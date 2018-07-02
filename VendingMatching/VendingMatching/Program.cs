using System;

namespace VendingMatching
{
    class MainClass
    {





        public static void Main(string[] args)
        {
            
            start();

           var drinkmatchine = new DrinkMachine();
           
                drinkmatchine.displayDrinkSelection();

           while(!drinkmatchine.checkTotal()){
                Console.WriteLine("The vending machine accepts denominations of Rs 1, 2, 5, 10, 20, 50 and 100 ");
                drinkmatchine.DepositCoin(Convert.ToInt32(Console.ReadLine()));
            }

            drinkmatchine.ReturnChange();
            //drinkmatchine.displayDrinkSelection();

            Console.ReadLine();

        }
        static void start(){

            //set app vers
            string appName = "Vending Matching";
            string appVersion = "1.0.0";
            string appAuthor = "charles okunrinmeta";

            //change text color
            Console.ForegroundColor = ConsoleColor.Green;

            Console.WriteLine("{0}: version {1} by {2} ", appName, appVersion, appAuthor);

            //Reset text coloe
           /* Console.ResetColor();

            Console.WriteLine("Wellcom to the vending matching app we offer you the best product at an affordable price");
            Console.WriteLine(" ");
            Console.WriteLine("Bellow are our list of products and their prices");
            Console.WriteLine(" ");
            string Coke = "35RS";
            string Crips = "25RS";
            string Chocolate = "40RS";
            string Water = "18RS";
            Console.WriteLine("Coke:{0} Crips:{1} Chocolate:{2} Water:{3} ", Coke, Crips, Chocolate, Water);
            Console.WriteLine(" ");
            Console.WriteLine("Please note we only accept denominations of Rs 1, 2, 5, 10, 20, 50 and 100 ");*/

           

        }


        }

       
       




       


    }

