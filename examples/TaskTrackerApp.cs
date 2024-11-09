using System;
using System.Collections.Generic;

namespace TaskTrackerApp
{
    class Program
    {
        static void Main(string[] args)
        {
            List<string> tasks = new List<string>();
            string command;

            Console.WriteLine("Welcome to the Task Tracker!");
            Console.WriteLine("Type 'add' to add a task, 'list' to list tasks, 'remove' to remove a task, and 'exit' to quit.");

            do
            {
                Console.Write("\nEnter command: ");
                command = Console.ReadLine().ToLower();

                switch (command)
                {
                    case "add":
                        Console.Write("Enter task: ");
                        string task = Console.ReadLine();
                        tasks.Add(task);
                        Console.WriteLine("Task added.");
                        break;

                    case "list":
                        Console.WriteLine("\nYour tasks:");
                        if (tasks.Count == 0)
                        {
                            Console.WriteLine("No tasks available.");
                        }
                        else
                        {
                            for (int i = 0; i < tasks.Count; i++)
                            {
                                Console.WriteLine($"{i + 1}. {tasks[i]}");
                            }
                        }
                        break;

                    case "remove":
                        Console.Write("Enter task number to remove: ");
                        if (int.TryParse(Console.ReadLine(), out int taskNumber) && taskNumber > 0 && taskNumber <= tasks.Count)
                        {
                            tasks.RemoveAt(taskNumber - 1);
                            Console.WriteLine("Task removed.");
                        }
                        else
                        {
                            Console.WriteLine("Invalid task number.");
                        }
                        break;

                    case "exit":
                        Console.WriteLine("Exiting Task Tracker. Goodbye!");
                        break;

                    default:
                        Console.WriteLine("Unknown command. Please use 'add', 'list', 'remove', or 'exit'.");
                        break;
                }

            } while (command != "exit");
        }
    }
}
