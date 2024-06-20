// See https://aka.ms/new-console-template for more information
using System;



namespace charactercheck
{
    class Program
    {
        static void Main(string[] args)
        {
            // array met woorden die gecontroleerd worden
            string[] stringsInArray = { "Methods", "Zijn", "Handig" };

            // Voor elke string in de array
            foreach (var str in stringsInArray)
            {
                controleVoorCharacter(str);
            }
        }

        // Een methode om te controleren of 'a' in het woord zit
        static void controleVoorCharacter(string input)
        {
            if (input.Contains('a'))
            {
                Console.WriteLine($"a zit in '{input}'.");
            }
            else
            {
                Console.WriteLine($"a zit niet in '{input}'.");
            }
        }
    }
}