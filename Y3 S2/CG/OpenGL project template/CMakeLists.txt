# Set the minimum required version of CMake
cmake_minimum_required(VERSION 3.5.0)

# Set the project name and version
project(hello_windows VERSION 1.0.0)

# Find the required OpenGL package
find_package(OpenGL REQUIRED)

# Create an executable named "hello_windows" from the source files "config.h" and "main.cpp"
add_executable(
    hello_windows
    src/config.h
    src/main.cpp
    src/glad.c
)

# Specify the include directories for the "hello_windows" target
target_include_directories(hello_windows PRIVATE dependencies)

# Find the required glfw3 package
find_package(glfw3 REQUIRED)

# Link the required libraries to the "hello_windows" target
target_link_libraries(hello_windows glfw OpenGL::GL)