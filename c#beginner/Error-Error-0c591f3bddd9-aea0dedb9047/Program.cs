using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Operatie? (+, -, /, *, %)");
        string operatie = Console.ReadLine();

        if (operatie != "+" && operatie != "-" && operatie != "/" && operatie != "*" && operatie != "%")
        {
            Console.WriteLine("Operatie is ongeldig");
            return;
        }

        float eersteGetal = 0;
        float tweedeGetal = 0;

        Console.WriteLine("Eerste Getal?");
        string ingevoerd1 = Console.ReadLine();
        try
        {
            eersteGetal = float.Parse(ingevoerd1);
        }
        catch (FormatException)
        {
            Console.WriteLine(ingevoerd1 + " is geen correct getal. Zorg ervoor dat je alleen getallen invoert.");
            return;
        }

        Console.WriteLine("Tweede Getal?");
        string ingevoerd2 = Console.ReadLine();
        try
        {
            tweedeGetal = float.Parse(ingevoerd2);
        }
        catch (FormatException)
        {
            Console.WriteLine(ingevoerd2 + " is geen correct getal. Zorg ervoor dat je alleen getallen invoert.");
            return;
        }

        float resultaat = 0;

        if (operatie == "+")
        {
            resultaat = eersteGetal + tweedeGetal;
        }
        else if (operatie == "-")
        {
            resultaat = eersteGetal - tweedeGetal;
        }
        else if (operatie == "/")
        {
            if (tweedeGetal == 0)
            {
                Console.WriteLine("Kan niet delen door 0");
                return;
            }
            resultaat = eersteGetal / tweedeGetal;
        }
        else if (operatie == "*")
        {
            resultaat = eersteGetal * tweedeGetal;
        }
        else if (operatie == "%")
        {
            resultaat = eersteGetal % tweedeGetal;
        }

        Console.WriteLine("Resultaat:");
        Console.WriteLine(resultaat);
    }
}
