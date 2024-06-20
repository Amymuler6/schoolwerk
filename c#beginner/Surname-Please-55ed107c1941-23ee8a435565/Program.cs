// See https://aka.ms/new-console-template for more information
using System;


class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Wat is je voornaam?");

        string voornaam = Console.ReadLine();

        Console.WriteLine("Wat is je achternaam?");

        string achternaam = Console.ReadLine();

        string volledige_naam = voornaam + " " + achternaam;

        Console.WriteLine("jouw naam is: " + volledige_naam + ".");

    }
}
