// See https://aka.ms/new-console-template for more information
using System;

class Program
{
    static void Main(string[] args)
    {
        int[] array = new int[] { 3, 7, 10, 40, 2, 4, 8 };
        //eerste getal in de array
        int grootsteGetal = array[0];

        foreach (int getal in array)
        {
            //vergelijkt welke getal grooter is
            if (getal > grootsteGetal)
            {
                //is de getal grooter dan wordt het in grootsteGetal gezet
                grootsteGetal = getal;
            }
        }

        Console.WriteLine("Grootste getal: " + grootsteGetal);

    }
}