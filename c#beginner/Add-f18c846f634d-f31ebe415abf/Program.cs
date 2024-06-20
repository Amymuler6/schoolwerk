// See https://aka.ms/new-console-template for more information
using System;

class Program
{
    static void Main(string[] args)
    {
        int[] array = new int[] { 3, 7, 10, 40, 2, 4, 8 };

        int getal = 0;

        foreach (int cijfer in array)
        {
            getal += cijfer;
        }

        Console.WriteLine("opsomming: " + getal);
    }
}