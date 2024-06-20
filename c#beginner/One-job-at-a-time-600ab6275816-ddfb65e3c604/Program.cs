// See https://aka.ms/new-console-template for more information
using System;

namespace controleKleineLetters
{
    class Program
    {
        static void Main(string[] args)
        {
            //array met woorden die gecontroleerd worden
            string[] words = {
            "Bit",
             "Academy",
             "Bit-Academy",
             "bit",
             "-",
             "AcAdEmY"
        };
            //een teller voor de hoeveelheid kleine letters
            int totaalKleineLetters = 0;

            foreach (var word in words)
            {
                //Word voor class
                int kleineLetters = Word.CountLowercaseCharacters(word);
                Console.WriteLine($"Er zitten '{kleineLetters}' kleine letters in '{word}'.");
                totaalKleineLetters += kleineLetters;
            }
            Console.WriteLine($"Totaal kleine letters: '{totaalKleineLetters}'");
        }
        class Word
        {
            public static int CountLowercaseCharacters(string word)
            {
                int characterCount = 0;

                foreach (char character in word)
                {
                    if ('a' <= character && character <= 'z')
                    {
                        characterCount++;
                    }
                }

                return characterCount;
            }
        }
    }
}