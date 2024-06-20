using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Tot welk getal?");
        int getal = int.Parse(Console.ReadLine());
        //opetll = 1 om ervoor te zorgen dat de 0 niet erbij komt
        for (int optell = 1; optell <= getal; optell++)
        {
            Console.WriteLine(optell);
        }

        //-1 om ervoor te zorgen dat het goed aftelt
        for (int aftell = getal - 1; aftell >= 1; aftell--)
        {
            Console.WriteLine(aftell);
        }
    }
}
