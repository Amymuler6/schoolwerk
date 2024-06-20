using System;

class Program
{
    static void Main(string[] args)
    {
        string[] studenten = new string[] { "student 1", "student 2", "student 3", "student 4" };

        Console.WriteLine(String.Join(", ", studenten));

    }
}
