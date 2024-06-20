using System;

class Program
{
    static void Main(string[] args)
    {
        string[] studenten = new string[] { "student C", "student A", "student B", "student D" };

        Array.Sort(studenten);

        foreach (string student in studenten)
        {
            Console.WriteLine(student);
        }

    }
}
