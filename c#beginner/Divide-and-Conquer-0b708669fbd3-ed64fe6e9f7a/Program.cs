﻿// See https://aka.ms/new-console-template for more information
using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Eerste Getal?");
        string ingevoerd1 = Console.ReadLine();
        float eersteGetal = float.Parse(ingevoerd1);

        Console.WriteLine("Tweede Getal?");
        string ingevoerd2 = Console.ReadLine();
        float tweedeGetal = float.Parse(ingevoerd2);

        if (eersteGetal == 0 || tweedeGetal == 0)
        {
            Console.WriteLine("Kan niet delen door 0");
        }
        else
        {
            Console.WriteLine("Resultaat:");
            Console.WriteLine(eersteGetal / tweedeGetal);
        }
    }
}
