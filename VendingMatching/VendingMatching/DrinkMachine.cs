using System;
using System.Collections.Generic;

namespace VendingMatching
{
    public class DrinkMachine
    {
     
        int costofcoke = 35;
      

        const int costofCrisps= 25;
        const int costofChocolate = 40;
        const int costofWater =18;
       int totalpriceofproduct;
        int totalpriceofcoke;
        int totalpriceofCrisps;
        int totalpriceofChocolate;
        int totalpriceofWater;
     
        public int RunningTotal { get;set; }
        public DrinkMachine()
        {
            RunningTotal = 0;
        }

        public void DepositCoin(int money){
            
            switch(money){
                case (1):
                    RunningTotal += 1;
                    break;

                case (2):
                    RunningTotal += 2;
                    break;

                case (5):
                    RunningTotal += 5;
                    break;

                case (40):
                    RunningTotal += 40;
                    break;
                case (10):
                    RunningTotal += 10;
                    break;

                case (20):
                    RunningTotal += 20;
                    break;
                case (50):
                    RunningTotal += 50;
                    break;
                case (100):
                    RunningTotal += 100;
                    break;

            
                default:
                    Console.WriteLine("invalid entry");
                    break;
                     
            }
           


        }

        public bool checkTotal()
        {
            if (RunningTotal >= totalpriceofproduct){
                return true; 
            }
            else{
                return false;  
            }
                
        }



       

        public void displayDrinkSelection()
        {


            Console.WriteLine("MENU");
            Console.WriteLine("Please enter the number that you want to do:");
            Console.WriteLine("1. Coke");
            Console.WriteLine("2. Crisps ");
            Console.WriteLine("3. Chocolate");
            Console.WriteLine("4. Water");
            Console.WriteLine("5. get total price of product");
            Console.WriteLine("6. Exit the menu to make payment");
           // IList<int> intList = new List<int>();

            bool menuchoice = true;
            int User;
            while (menuchoice)
            { 

                totalpriceofcoke += costofcoke;
                totalpriceofChocolate += costofChocolate;
                totalpriceofCrisps += costofCrisps;
                totalpriceofWater += costofWater;
                totalpriceofproduct = totalpriceofcoke + totalpriceofChocolate + totalpriceofCrisps+ totalpriceofWater;

                User = int.Parse(Console.ReadLine());
                if (User == 1)
                {
                    Console.WriteLine("The price of coke is" + totalpriceofcoke);

                    continue;
                }

                if (User == 2)
                {


                    Console.WriteLine("The price of chocolate is" + totalpriceofChocolate);

                    continue;
                }
                if (User == 3)
                {
                    Console.WriteLine("The price of Crisps is" + totalpriceofCrisps);

                    continue;
                }
                if (User == 4)
                {

                    Console.WriteLine("The price of water is" + totalpriceofWater);


                }
                if (User == 5)
                {

                    Console.WriteLine("The total of all selected product is" + totalpriceofproduct);
                }

                if (User == 6)
                {

                    menuchoice = false;
                }

            }
            // totalpriceofproduct++;
          //  intList.Add(totalpriceofproduct);
        }

     /*   public void MakeDrinkSelection(char selection){

            do
            {
                switch (selection)
                {
                    case 'C':
                        Console.WriteLine("Thank you for choosing coke the price is " + " " + costofcoke);
                        // Console.WriteLine(" your total price is" +totalprice);
                       
                        ReturnChange();
                        break;




                    case 'P':
                        Console.WriteLine("Thank you for choosing pepsi" + costofpepsi);
                       
                        ReturnChange();
                        break;
                    case 'D':
                        Console.WriteLine("Thank you for choosing coke");

                        ReturnChange();
                        break;


                    default:
                        Console.WriteLine("INVALID SELECTION PLEASE REENTER YOUR SELECTION");
                        selection = Convert.ToChar(Console.ReadLine().ToUpper());
                       

                        break;

                }

            } while (selection !='Q');
               /* while (!selectionOk)
                {
                    
                    switch (selection)
                    {
                        case 'C':
                        Console.WriteLine("Thank you for choosing coke the price is "+ " " + costofcoke);
                       // Console.WriteLine(" your total price is" +totalprice);
                        selectionOk = true;
                            ReturnChange();
                            break;




                        case 'P':
                            Console.WriteLine("Thank you for choosing pepsi" + costofpepsi);
                            selectionOk = true;
                            ReturnChange();
                            break;
                        case 'D':
                            Console.WriteLine("Thank you for choosing coke");
                            selectionOk = true;
                            ReturnChange();
                            break;


                        default:
                            Console.WriteLine("INVALID SELECTION PLEASE REENTER YOUR SELECTION");
                            selection = Convert.ToChar(Console.ReadLine().ToUpper());
                            selectionOk = false;

                            break;

                    }



                }
            
        }*/


        public void ReturnChange(){
            if(RunningTotal>totalpriceofproduct){
                Console.WriteLine("Your change is {0:C}", RunningTotal-totalpriceofproduct);
            }else{
                Console.WriteLine("You dont have any change");
            }
        }
    }
}
