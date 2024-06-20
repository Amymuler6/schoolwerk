// See https://aka.ms/new-console-template for more information
using System;


class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Eerste Getal?");
        string ingevoerd1 = Console.ReadLine();
        int eersteGetal = int.Parse(ingevoerd1);

        Console.WriteLine("Tweede Getal");
        string ingevoerd2 = Console.ReadLine();
        int tweedeGetal = int.Parse(ingevoerd2);
        Console.WriteLine("Resultaat:");
        Console.WriteLine(eersteGetal + tweedeGetal);
    }
}
