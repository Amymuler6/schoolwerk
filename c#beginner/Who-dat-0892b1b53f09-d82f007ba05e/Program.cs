// See https://aka.ms/new-console-template for more information
using System;


class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Hi! Ik ben C#. Wat is jouw naam?");
        //pakt input op
        string naam = Console.ReadLine();
        //+ voor samenvoegen
        Console.WriteLine("leuk je te ontmoeten, " + naam + "!");

    }
}
