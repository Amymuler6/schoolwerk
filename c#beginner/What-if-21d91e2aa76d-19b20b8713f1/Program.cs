// See https://aka.ms/new-console-template for more information
using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Wat is het wachtwoord?");
        string ingevoerd_wachtwoord = Console.ReadLine();

        string toegang;

        if (ingevoerd_wachtwoord == "baas")
        {
            toegang = "Totale toegang";
        }
        else if (ingevoerd_wachtwoord == "medewerker")
        {
            toegang = "Gedeeltelijke toegang";
        }
        else
        {
            toegang = "Geen toegang";
        }

        Console.WriteLine(toegang);
    }
}
