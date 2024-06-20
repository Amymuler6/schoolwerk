// See https://aka.ms/new-console-template for more information
using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Welk getal");
        string ingevoerde_getal = Console.ReadLine();
        int getal = int.Parse(ingevoerde_getal);

        if (getal % 2 == 0)
        {
            Console.WriteLine(getal + " is even");
            return;
        }
        else
        {
            Console.WriteLine(getal + " is oneven");
            return;
        }
    }
}