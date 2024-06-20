using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Operatie? (+, -, /, *)");
        string operatie = Console.ReadLine();

        if (operatie != "+" && operatie != "-" && operatie != "/" && operatie != "*")
        {
            Console.WriteLine("Operatie is ongeldig");
            return;
        }

        Console.WriteLine("Eerste Getal?");
        string ingevoerd1 = Console.ReadLine();
        float eersteGetal = float.Parse(ingevoerd1);

        Console.WriteLine("Tweede Getal?");
        string ingevoerd2 = Console.ReadLine();
        float tweedeGetal = float.Parse(ingevoerd2);

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
            if (tweedeGetal == 0 || eersteGetal == 0)
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

        Console.WriteLine("Resultaat:");
        Console.WriteLine(resultaat);
    }
}
