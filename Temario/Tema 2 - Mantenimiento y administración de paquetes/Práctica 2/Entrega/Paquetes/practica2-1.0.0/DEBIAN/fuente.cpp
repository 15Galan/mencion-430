#include <cstdio>
#include <iostream>
#include <memory>
#include <stdexcept>
#include <string>
#include <array>

int main() {
    std::array<char, 128> buffer;

    auto pipe = popen("kolf", "r");

    if (!pipe) throw std::runtime_error("popen() ha fallado");

    while (!feof(pipe)) {
        if (fgets(buffer.data(), 128, pipe) != nullptr)
            printf("%s", buffer.data());
    }

    pclose(pipe);

    return 0;
}

