// See https://aka.ms/new-console-template for more information
using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Wat is het wachtwoord?");
        string ingevoerd_wachtwoord = Console.ReadLine();

        bool baas;

        Console.WriteLine("Baas ingelogd:");

        if (ingevoerd_wachtwoord == "baas")
        {
            baas = true;
        }
        else
        {
            baas = false;
        }

        Console.WriteLine(baas);
    }
}
