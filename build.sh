for dir in $(ls); do cd $dir; docker build -t $dir .; cd ..;done
